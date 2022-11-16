import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Allotment } from './allotment';
import { AllotmentView } from './allotmentView';

@Injectable({
  providedIn: 'root'
})
export class AllotmentsService {

  private readonly API = 'http://localhost:8080/allotments'
  constructor(private http: HttpClient) { 
  }

  getAll(): Observable<Allotment[]>{
    return this.http.get<Allotment[]>(this.API)
  }

  getById(id: number): Observable<AllotmentView>{
    const url = `${this.API}/${id}`
    return this.http.get<AllotmentView>(url)
  }

  

}
