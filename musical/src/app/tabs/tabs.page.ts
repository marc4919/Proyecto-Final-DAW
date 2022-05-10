import { Component } from '@angular/core';
import { HostListener } from '@angular/core';
import { MenuController } from '@ionic/angular';
import { Platform } from '@ionic/angular';

@Component({
  selector: 'app-tabs',
  templateUrl: 'tabs.page.html',
  styleUrls: ['tabs.page.scss']
})
export class TabsPage {
  screenHeight: number;
  screenWidth: number;
  mobile = 1;
  darkMode = true;



  constructor(private menu: MenuController, public platform: Platform) {
    this.getScreenSize();
    this.initializeApp();
  }


  @HostListener('window:resize', ['$event'])
    getScreenSize(event?) {

          this.screenHeight = window.innerHeight;
          this.screenWidth = window.innerWidth;
          if(this.screenWidth < 576){
            this.mobile = 0;
          }
          else{
            this.mobile=1;
          };
          console.log(this.screenHeight, this.screenWidth);
    }

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
