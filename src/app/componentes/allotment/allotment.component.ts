import { Component, OnInit } from '@angular/core';
import { faEye, faGavel, faCalendarDays, faClock, faLocationDot } from '@fortawesome/free-solid-svg-icons';

@Component({
  selector: 'app-allotment',
  templateUrl: './allotment.component.html',
  styleUrls: ['./allotment.component.css']
})
export class AllotmentComponent implements OnInit {

  eye = faEye
  gavel = faGavel
  calendar = faCalendarDays
  clock = faClock
  locationDot = faLocationDot

  constructor() { }

  ngOnInit(): void {
  }

}
