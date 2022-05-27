import { Component, OnInit } from '@angular/core';
import { AudiosService } from '../services/audios.service';

@Component({
  selector: 'app-tab3',
  templateUrl: 'tab3.page.html',
  styleUrls: ['tab3.page.scss']
})
export class Tab3Page implements OnInit {
  audios = [];

  constructor(private AudiosService: AudiosService) {}

  ngOnInit(): void {
    this.AudiosService.getAllAudio().subscribe(response => this.audios = response);
  }

}
