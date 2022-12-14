// перебор ключей / значений / элементов в объекте
const obj1 = { red: 255, green: 0, blue: 0, opacity: .3 };

Object.keys(obj1).forEach(key => console.log(key)); 
Object.values(obj1).forEach(value => console.log(value)); 
Object.entries(obj1).forEach(entry => console.log(entry)); 

// перебор ключей / значений / элементов в Map
const set1 = new Set([['red', 255], ['green', 0], ['blue', 0], ['opacity', .3]]);

// все выводы в консоль одинаковы, так как ключ и есть значение
// присутствует для обратной совместимостью с Map
for (let value of set1) console.log(value);
for (let key of set1.keys()) console.log(key);
for (let value of set1.values()) console.log(value);
for (let [key, value] of set1.entries()) console.log(key);
for (let [key, value] of set1.entries()) console.log(value);