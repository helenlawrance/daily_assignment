import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MyproComponent } from './mypro.component';

describe('MyproComponent', () => {
  let component: MyproComponent;
  let fixture: ComponentFixture<MyproComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MyproComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MyproComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
