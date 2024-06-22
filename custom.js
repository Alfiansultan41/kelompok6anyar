document.addEventListener("DOMContentLoaded", function () {
  for (let index = 0; index < mahasiswaArray.length; index++) {
    createBiodata(mahasiswaArray[index]);

  }

  function createBiodata(data) {
    let biodataDiv = document.createElement("div");
    let nim = document.getElementById("nim").value;
    biodataDiv.className = nim;

    biodataDiv.innerHTML = `
        <div class="team_member" style="margin-block: 2em; padding-block: 2em; border: 0px solid #000; border-radius: 0;border-sizing: border-box; height: 620px; padding:20px">
        <img class="rounded-circle sam" src="${data.foto}" alt="" style="background: #dbd5f9; max-width: 190px; width: 100%; height: 190px; margin: 0 auto; padding: 5px; position: relative;">
        <h3>${data.nama}</h3>
        <h2>Teknik Informatika A-PG</h2>
        <span>${data.nim}</span>
        <p>
          <h4>TANGGAL LAHIR :</h4>
        </p>
        ${data.ttl}
        <p>
          <h4>ALAMAT :</h4>
        </p>
        ${data.alamat}
        <p>
          <h4>PENDIDIKAN :</h4>
        </p>
        ${data.pendidikan}
        </div>
        
      `;

    return biodataDiv;
  }

  let container = document.getElementById("biodataContainer");
  mahasiswaArray.forEach(mahasiswa => {
    container.appendChild(createBiodata(mahasiswa));
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('.menu ul li a');
  links.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });
});