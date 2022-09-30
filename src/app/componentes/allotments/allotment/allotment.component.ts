import { Component, Input, OnInit } from '@angular/core';
import { faEye, faGavel, faCalendarDays, faClock, faLocationDot } from '@fortawesome/free-solid-svg-icons';
import { Allotment } from '../allotment';

@Component({
  selector: 'app-allotment',
  templateUrl: './allotment.component.html',
  styleUrls: ['./allotment.component.css']
})
export class AllotmentComponent implements OnInit {

  @Input() allotment: Allotment = {
    id: 0,
    category: {
      id: 0,
      name: ''
    },
    brand: {
      id: 0,
      name: ''
    },
    name: '',
    status: {
      id: 0,
      name: ''
    },
    initialValue: 0,
    totalValue: 0,
    minimumBid: 0,
    startDate: new Date(),
    endDate: new Date(),
    location: {
      id: 0,
      cityName: '',
      uf: {
        id: 0,
        name: ''
      },
      countryName: '',
      createdAt: new Date(),
      updateAt: new Date()
    },
    view: 0
  }

  eye = faEye
  gavel = faGavel
  calendar = faCalendarDays
  clock = faClock
  locationDot = faLocationDot

  constructor() { }

  ngOnInit(): void {
  }

}
