import { Component, OnInit } from '@angular/core';
import { MusicalesService } from 'src/app/services/musicales.service'

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page implements OnInit {
  musicales:any = [];

  constructor(private MusicalesService: MusicalesService) {}

  ngOnInit(): void {
    this.MusicalesService.getAllMusicals().subscribe(response => this.musicales = response);
  }

}
