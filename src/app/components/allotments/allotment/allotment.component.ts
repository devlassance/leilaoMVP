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
    category: '',
    brand: '',
    thumbnail: '',
    name: '',
    slug: '',
    status: '',
    totalValue: 0,
    startDate: new Date(),
    endDate: new Date(),
    city: '',
    uf: '',
    bids: 0,
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
