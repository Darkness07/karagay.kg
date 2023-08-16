function getArr() {
  let inputAll = Array.from(document.querySelectorAll('#forms input'));
  let arr = [];
  let obj = {};

  let checkFieldsLength = inputAll.every((el) => el.value.length);

  if (checkFieldsLength) {
    for (const input of inputAll) {
      obj[input.id] = input.value;
    }
    arr.push(obj);
    return console.log(arr);
  }
  return alert('Не все поля заполнены');
}