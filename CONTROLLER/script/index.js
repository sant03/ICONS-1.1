function Person (fname, lname, age, gender , interests){
    this.name = {
        'fname': fname,
        'lname': lname
    }
    this.age = age;
    this.gender = gender;
    this.interests = interests

    var pronoum;

        if(this.gender === 'Male'){
            pronoum = 'He';
        }else if(this.gender === 'Female'){
            pronoum = 'She';
        }else{
            pronoum = 'They';
        }

    //Lopp through interests
    for(var i = 0; i < this.interests.lenght; i++){
        this.interests = i
    }
    
    this.greeting = function(){
        console.log(`Hi , ${pronoum} is ${this.name.fname} ${this.name.lname}, ${pronoum} is ${this.age} yearse old, ${pronoum} likes ${this.interests}`);
    }
}

let person1 = new Person ('Salva', 'Jayes', 25, 'Female' ,['skydiving', 'surf', 'eat' , 'read Books']);
person1.name;
person1.greeting();

let person2 = new Person ('Santiago', 'Potes', 19, 'Male', ['Take photos', 'programming']);
person2.name;
person2.greeting();

var currentUser = new Object()

currentUser.name = 'Leonardo';
currentUser.age = 20;
currentUser.greeting = function(){
    console.log(`Hi mi name is ${currentUser.name}`)
}