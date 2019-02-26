import { Component, OnInit } from '@angular/core';
import {NgForm} from '@angular/forms';
import { DbService } from '../db.service';
import { Student } from '../student';
@Component({
  selector: 'app-angulardb',
  templateUrl: './angulardb.component.html',
  styleUrls: ['./angulardb.component.css']
})
export class AngulardbComponent implements OnInit {
  student =new Student();
   error:any;
   success='';
  constructor(private mydb:DbService) {

   }

  ngOnInit() {
  }
registeration(f:NgForm)

{
   this.mydb.store(this.student).subscribe(
   data=>{
   this.success="successfully inserted";
      f.reset();
  },
  
  (err)=>{this.error="err occured";}
  );

}
}
