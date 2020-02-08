function fibonacci(baris, kolom) {
    let s = "";
    for (i = 1; i <= baris; i++) {
        for (t = 1; t <= kolom; t++) {
            s += i + ", ";
        }
        s += "\n";
    }
    return s;
}
console.log(fibonacci(4, 5));

//function fibonacci2(baris, kolom) {
let a = 0; // 1 1 2
let b = 1; // 1 2 3
let c = 1;
let hasil = "";
for (let i = 1; i <= 4; i++) {
    if (i == 4) {
        hasil += "\n";
    } else {
        c = a + b;
        a = b;
        b = c;
        hasil += c + ", ";
    }
}
console.log(hasil);