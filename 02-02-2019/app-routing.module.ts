import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DemocComponent } from './democ/democ.component';
import { Demo2Component } from './demo2/demo2.component';
import { Demo3Component } from './demo3/demo3.component';
  import { from } from 'rxjs';

const routes: Routes = [{path:'home',component:DemocComponent},
{path:'login',component:Demo2Component},
{path:'apply',component:Demo3Component}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
