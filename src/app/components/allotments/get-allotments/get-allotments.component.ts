import { Component, OnInit } from '@angular/core';
import { Allotment } from '../allotment';
import { AllotmentsService } from '../allotments.service';

@Component({
  selector: 'app-get-allotments',
  templateUrl: './get-allotments.component.html',
  styleUrls: ['./get-allotments.component.css']
})
export class GetAllotmentsComponent implements OnInit {

  getAllotments : Allotment[] = []

  constructor(private service: AllotmentsService) { }

  ngOnInit(): void {
    this.service.getAll().subscribe((l)=>{
      this.getAllotments = l
    })
  }

}
