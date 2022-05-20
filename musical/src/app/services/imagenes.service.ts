import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ImagenesService {
  private urlApi = 'https://localhost:8000/api/imagens'

  constructor(private http: HttpClient) { }

  getAllImages():Observable<any>{
    return this.http.get(this.urlApi)
  }
}
