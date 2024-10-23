function openModal() {
    document.getElementById('modal').style.display = 'flex';
  }
  function closeModal() {
    document.getElementById('modal').style.display = 'none';
  }

  document.getElementById('openModalBtn').addEventListener('click', openModal);

  document.getElementById('addDataForm').addEventListener('submit', function(e) {
    e.preventDefault(); 
    const namaPT = document.getElementById('namaPT').value;
    const emailPT = document.getElementById('emailPT').value;
    const alamatPT = document.getElementById('alamatPT').value;
    const jenisPT = document.getElementById('jenisPT').value;

    const table = document.getElementById('customers');
    const newRow = table.insertRow();
    
    newRow.innerHTML = `
      <td>${namaPT}</td>
      <td>${emailPT}</td>
      <td>${alamatPT}</td>
      <td>${jenisPT}</td>
      <td><a href="#">Delete Edit</a></td>
    `;
    document.getElementById('addDataForm').reset();
    closeModal();
  });
  
    const apiUrl = 'assets/json/dummyLoker.json';
    fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        const companies = data.companies;
        const table = document.getElementById('companiesTable');
        companies.forEach(company => {
          const row = table.insertRow(); 

          const cell1 = row.insertCell(0);
          const cell2 = row.insertCell(1);
          const cell3 = row.insertCell(2);
          const cell4 = row.insertCell(3);
          const cell5 = row.insertCell(4);
          cell1.innerHTML = company.id;
          cell2.innerHTML = company.name;
          cell3.innerHTML = company.email;
          cell4.innerHTML = company.address;
          cell5.innerHTML = company.type;
        });
      })
      .catch(error => {
        console.error('Data Null:', error);
      });