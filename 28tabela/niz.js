const brojevi = [1, 2, 3, 4];
console.log(brojevi);
console.log(brojevi[0]);

const imena = ["aleksa", "ruzica", "jovana"];
console.log(imena);
console.log(imena[0]);

const mix = ["aleksa", 1, true];

for (let brojac = 0; brojac < mix.length; brojac++) {
    console.log(mix[brojac]);
};

const rec = "javascript";
for (let brojac = 0; brojac < rec.length; brojac++) {
    console.log(rec[brojac]);
};