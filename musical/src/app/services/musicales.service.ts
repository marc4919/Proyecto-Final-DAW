import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class MusicalesService {
  private urlApi = 'https://localhost:8000/api/musicals'

  constructor(private http: HttpClient) { }

  getAllMusicals():Observable<any>{
    return this.http.get(this.urlApi)
  }
}
