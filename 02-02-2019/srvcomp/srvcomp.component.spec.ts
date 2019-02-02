import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SrvcompComponent } from './srvcomp.component';

describe('SrvcompComponent', () => {
  let component: SrvcompComponent;
  let fixture: ComponentFixture<SrvcompComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SrvcompComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SrvcompComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
