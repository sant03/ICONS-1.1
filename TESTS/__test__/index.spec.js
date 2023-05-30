import { Person } from '../../CONTROLLER/script/index';

test('person.gender is Male should return He', () => {
    let person1 = new Person('Santiago', 'Potes', 19, 'Male', ['Take photos', 'programming'])
    expect(person1.gender == 'Male').toBe(true)
});

test('person.gender is Female should return She', () => {
    let person2 = new Person('Salva', 'Jayes', 25, 'Female' ,['skydiving', 'surf', 'eat' , 'read Books'])
    expect(person2.gender == 'Female').toBe(true)
});
