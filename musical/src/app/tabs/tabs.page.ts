import { Component } from '@angular/core';
import { HostListener } from '@angular/core';

@Component({
  selector: 'app-tabs',
  templateUrl: 'tabs.page.html',
  styleUrls: ['tabs.page.scss']
})
export class TabsPage {
  screenHeight: number;
  screenWidth: number;
  mobile = 1;



  constructor() {
    this.getScreenSize();
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

}
