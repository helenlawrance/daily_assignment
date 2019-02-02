import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DemocComponent } from './democ.component';

describe('DemocComponent', () => {
  let component: DemocComponent;
  let fixture: ComponentFixture<DemocComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DemocComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DemocComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
