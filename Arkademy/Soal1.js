function biodata(name, age, address, hobbies, is_married, listschool, skills, interest_in_coding) {
    let data = {};
    data.name = name;
    data.age = age;
    data.address = address;
    data.hobbies = hobbies;
    data.married = is_married;
    data.listschool = listschool;
    data.skills = skills;
    data.interest_in_coding = interest_in_coding;
    console.log(JSON.stringify(data));
    return data;
}

let datadiri = biodata("Heri", 21, "Depok", ["Program", "Berenang"], false, { name: "Heri", year_in: 2016, year_out_: 2019, mayor: "Computer Engineering" }, { skill_name: "Program", level: ["Beginner", "Advanced", "Expert"] }, true);