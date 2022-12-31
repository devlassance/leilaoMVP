import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { createUser } from './createUser';

@Injectable({
  providedIn: 'root'
})
export class ServiceService {

  private readonly API = 'http://localhost:8080/users'

  constructor(private http: HttpClient) { 
  }

  register(user: createUser): Observable<createUser>{
    return this.http.post<createUser>(this.API, user)
  }
}
