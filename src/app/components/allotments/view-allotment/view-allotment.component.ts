import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { faEye, faGavel, faPlus, IconDefinition } from '@fortawesome/free-solid-svg-icons';
import { AllotmentsService } from '../allotments.service';
import { AllotmentView } from '../allotmentView';
@Component({
  selector: 'app-view-allotment',
  templateUrl: './view-allotment.component.html',
  styleUrls: ['./view-allotment.component.css']
})
export class ViewAllotmentComponent implements OnInit {

  allotment: AllotmentView = {
    id: 0,
    category: '',
    brand: '',
    thumbnail: '',
    name: '',
    slug: '',
    status: '',
    totalValue: 0,
    minimumBid: 0,
    startDate: new Date(),
    endDate: new Date(),
    city: '',
    uf: '',
    bids: 0,
    view: 0,
    principalName: '',
    principalTitle: '',
    principalDescription: '',
    principalCategory: '',
    principalStartDate: new Date(),
    principalEndDate: new Date()
  }

  constructor(private service: AllotmentsService, private route: ActivatedRoute) { }

  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id');
    this.service.getById(parseInt(id!)).subscribe((a) => {
      this.allotment = a
    })    
    
  }
  

  eye = faEye
  gavel = faGavel
  plus = faPlus

  incremeting(value: number): Array<number>{

    let arr: Array<number> = []

    let bid: number = value

    for (let i: number = 0; i < 8; i++) {
      arr.push(bid)
      bid += value
    }    

    return arr
  }

}