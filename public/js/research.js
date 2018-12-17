function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}

/////

// window.onload = () => {
// 	document.querySelector('#addContainer').addEventListener('click', () => {
// 		createResearchBox()
// 	})
// }

function createResearchBox() {
	const container = document.querySelector('#reseach_container > tbody')

	// const element = document.createElement('tr')
	// letelement.innerHTML = `
	let _date = new Date();
	let date = `${_date.getDate()}-${_date.getMonth()}-${_date.getFullYear()}`
	let element = `
	<tr item-date="${date}" item-id="-1">
	<td style="padding-bottom: 20px">
	<div class="_container">
		<h3 style="font-weight: 100; color: #117167; display:inline">ข้อมูลผลงานวิจัย</h3>
		<div class="card-content">
			<div class="card-body">
				<p contenteditable="false">ข้อมูล research</p>

				pub
				<input type="text" name="publication"><br>
				
			</div>
		</div>
	</div>
</td>

<td>
		<table style="margin-top: 7px">
			<tr>
				<th>
					<button type="button" class="button" style="width: 75px;font-size: 14px; background: #007bff" onclick="editResearch(this)">EDIT</button>
				</th>
			</tr>
			<tr>
				<th>
					<button type="button" class="button" style="width: 75px;font-size: 14px; background: #dc3545" onclick="deleteResearch(this)">DELETE</button>
				</th>
			</tr>
			<tr>
				<th>
					<button type="button" class="button" style="width: 75px;font-size: 14px; background: #28a745" onclick="saveResearch(this)">SAVE</button>
				</th>
			</tr>
		</table>
	</td>
</tr>
	`
	container.insertAdjacentHTML('afterbegin', element)
}

function editResearch(event) {
	event.parentElements(6).children[0].children[0].children[1].children[0].children[0].contentEditable = true
}

function saveResearch(event) {
	const parent = event.parentElements(6)
	parent.children[0].children[0].children[1].children[0].children[0].contentEditable = false
	// console.log(event.parentElements(6).getAttribute('item-id'))
	let text = parent.querySelector('p').textContent
	let date = parent.querySelector('input[name=publication]').value
	addResearch(parent.getAttribute('item-id'), text, date)
}

function deleteResearch(event) {
	$("#exampleModal").modal('show');


	// event.parentElements(6).remove()
}


// sort table
function sortTable(sort = asc) {
	let tbody = document.querySelector('#reseach_container > tbody')
	let clone = tbody.cloneNode(true)
	// let rows = document.querySelector('#reseach_container > tbody').rows
	let rows = clone.rows
	let objElement = []

	for (let index = 0; index < rows.length; index++) {
		const element = rows[index]
		objElement.push({
			'date': element.getAttribute('item-date'),
			'element': element
		})
	}

	tbody.innerHTML = ""
	if (sort === 'asc') {
		objElement.sort(function (a, b) {
			return (dateFormat(a.date)) - (dateFormat(b.date))
		})
		for (const iterator of objElement) {
			tbody.insertAdjacentElement('afterbegin', iterator.element)
		}
	} else {
		objElement.sort(function (a, b) {
			return (dateFormat(b.date)) - (dateFormat(a.date))
		})
		for (const iterator of objElement) {
			tbody.insertAdjacentElement('afterbegin', iterator.element)
		}
	}

}


// Add Research
function addResearch(id, text, date) {
	console.log("addR: " + id)
	if (id == '-1') {
		// new research
		console.log('new')
		fetch('/research', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			body: JSON.stringify({
				"info": text,
				"publication": date
			})
		})
			.then(res => res.json())
			.then(response => {
				console.log(response)
			})
	} else {
		// edit save
		console.log('edit')
	}
}




// Extension

Object.defineProperty(Object.prototype, 'parentElements', {
	enumerable: false,
	configurable: false,
	writable: false, // Set to False
	value: function (times = 1) {
		let _this = this
		for (i = 0; i < times; i++)
			_this = _this.parentElement
		return _this
	}
});

function dateFormat(date) {
	// Native
	const datePattern = /^(\d{2})-(\d{2})-(\d{4})$/;
	const [, day, month, year] = datePattern.exec(date);
	return new Date(`${month}, ${day} ${year}`);
}

// Bottstrap && JQ
// modal dailog
/*
let el = $("table")
console.log(el)
var modalConfirm = function (callback) {
	$("#btn-confirm").on("click", function () {
		$("#mi-modal").modal('show');
	});

	$("#modal-btn-si").on("click", function () {
		callback(true);
		$("#mi-modal").modal('hide');
	});

	$("#modal-btn-no").on("click", function () {
		callback(false);
		$("#mi-modal").modal('hide');
	});
};

modalConfirm(function (confirm) {
	console.log(confirm)
	if (confirm) {
		//Acciones si el usuario confirma
		// $("#result").html("CONFIRMADO");
	} else {
		//Acciones si el usuario no confirma
		// $("#result").html("NO CONFIRMADO");
	}
});
*/
