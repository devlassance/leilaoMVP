import { Component } from '@angular/core';
import { createUser } from './createUser';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
  user: createUser = {
    name: '',
    email: '',
    cpf: 0,
    rg: 0,
    genre: 0,
    birthDate: '',
    celphone: 0,
    nick: '',
    password: '',
    zipCode: 0,
    cityName: '',
    address: '',
    uf: 0
  }
}
