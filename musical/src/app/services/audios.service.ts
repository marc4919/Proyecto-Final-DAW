import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class AudiosService {
  private urlApi = 'https://localhost:8000/api/audio'

  constructor(private http: HttpClient) { }

  getAllAudio():Observable<any>{
    return this.http.get(this.urlApi)
  }
}
