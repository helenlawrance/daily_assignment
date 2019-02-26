import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HelloancelComponent } from './helloancel.component';

describe('HelloancelComponent', () => {
  let component: HelloancelComponent;
  let fixture: ComponentFixture<HelloancelComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HelloancelComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HelloancelComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
