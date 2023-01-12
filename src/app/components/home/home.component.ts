import { Component, OnInit } from '@angular/core';
import { faCar, faCarSide, faMotorcycle, faGear, faTractor, faCartShopping, faBuilding, faMagnifyingGlass } from '@fortawesome/free-solid-svg-icons';



@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  car = faCar
  carSide = faCarSide
  motorCycle = faMotorcycle
  gear = faGear
  tractor = faTractor
  cartShopping = faCartShopping
  building = faBuilding
  magnifyingGlass = faMagnifyingGlass

  constructor() { }

  ngOnInit(): void {
  }

}
