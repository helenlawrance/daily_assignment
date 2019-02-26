import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AngulardbComponent } from './angulardb.component';

describe('AngulardbComponent', () => {
  let component: AngulardbComponent;
  let fixture: ComponentFixture<AngulardbComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AngulardbComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AngulardbComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
