(function(){
  const converter = new showdown.Converter();
  let text = document.querySelector("#shoplist");
  let html = converter.makeHtml(text.innerHTML);
  text.innerHTML = html;
  console.log(html);
})()