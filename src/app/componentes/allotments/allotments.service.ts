import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Allotment } from './allotment';

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

}
