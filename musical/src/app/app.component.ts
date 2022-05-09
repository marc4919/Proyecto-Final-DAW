import { Component } from '@angular/core';
import { MenuController } from '@ionic/angular';
import { Platform } from '@ionic/angular';


@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss'],
})
export class AppComponent {
  darkMode = true;
  constructor(private menu: MenuController, public platform: Platform) {this.initializeApp();}

  initializeApp() {
    this.platform.ready().then(() => {
    this.changeDarkMode();
     });
    }
    changeDarkMode(){
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
      if (prefersDark.matches){
      document.body.classList.toggle('dark');
        }
       }

       change() {
        this.darkMode = !this.darkMode;
        document.body.classList.toggle('dark');
         }
  openFirst() {
    this.menu.enable(true, 'first');
    this.menu.open('first');
  }

  openEnd() {
    this.menu.open('end');
  }

  openCustom() {
    this.menu.enable(true, 'custom');
    this.menu.open('custom');
  }
}
