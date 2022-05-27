import { Component, OnInit } from '@angular/core';
import { SwiperComponent } from 'swiper/angular';
import { ImagenesService } from '../services/imagenes.service';
import SwiperCore, { EffectCards } from 'swiper';

SwiperCore.use([EffectCards]);

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss'],
})
export class Tab2Page implements OnInit{
  imagenes = [];

  constructor(private ImagenesService: ImagenesService) {}

  ngOnInit(): void {
    this.ImagenesService.getAllImages().subscribe(response => this.imagenes = response);
  }

}
