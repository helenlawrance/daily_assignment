import { Component, OnInit } from '@angular/core';
import { student } from '../student';
import { NgForm } from '@angular/forms';
import { FirstserviceService } from '../firstservice.service';

  import { from } from 'rxjs';

@Component({
  selector: 'app-demo3',
  templateUrl: './demo3.component.html',
  styleUrls: ['./demo3.component.css']
})
export class Demo3Component implements OnInit {
  student = new student();
  isRegistered = false;

  constructor(private applyservice: FirstserviceService) { }

  ngOnInit() {
  }
  registeration(f:NgForm){
    this.applyservice.store(this.student).subscribe(data=>{
      this.isRegistered = true;
      console.log("success");
      f.reset();
    },
    (err) => {this.isRegistered=false;
    });
  }
}
