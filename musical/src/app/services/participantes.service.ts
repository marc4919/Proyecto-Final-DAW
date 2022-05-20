import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ParticipantesService {
  private urlApi = 'https://localhost:8000/api/participantes'

  constructor(private http: HttpClient) { }

  getAllParticipantes():Observable<any>{
    return this.http.get(this.urlApi)
  }
}
