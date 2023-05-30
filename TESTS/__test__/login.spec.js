import {validateForm} from '../../CONTROLLER/script/_Login';


test('If user field is empty should return Por favor complete los campos requeridos', ()=> {
    let user = "";
    let password = "";
    expect(validateForm(user, password)).toBe(true)
})
