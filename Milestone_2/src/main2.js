//JS
axios.get('dist/php/db.php')
.then(resp => {
  // console.log(resp.data.response);
  let albums = resp.data.response;

  albums.forEach(element => {
    // console.log(element);
    const section = document.querySelector('.albums_api');
    let title = element.title;
    let poster = element.poster;
    let author = element.author;
    let year = element.year;
    console.log(title, poster, author,year);

    let markup = `
      <div class="cd">
        <img src="${poster}" alt="${title}">
        <h3>${title}</h3>
        <span class="author">${author}</span>
        <span class="year">${year}</span>
       </div><!-- /.cd -->
    `;
    section.insertAdjacentHTML('beforeend', markup);
    
  });
}).catch(error => {
  this.error = "Ops! C'è stato un problema";
  console.log("ERROR", error);
})
