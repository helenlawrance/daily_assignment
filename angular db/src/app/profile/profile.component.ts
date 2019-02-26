import { Component, OnInit } from '@angular/core';
import { analyzeAndValidateNgModules } from '@angular/compiler';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  user:any;
  collapse:boolean=true;
  constructor() { 
    this.user={
      name: 'Ancel Treasa Jose',
      qualification:'MCA',
       address:'chittarikkal,kasaragod,671326',
       phone:
      ['7559921349',
      '8111921349']
    };
  }
toggle()
{
  this.collapse=!this.collapse;
}
  ngOnInit() {
  }

}
