import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GetAllotmentsComponent } from './get-allotments.component';

describe('GetAllotmentsComponent', () => {
  let component: GetAllotmentsComponent;
  let fixture: ComponentFixture<GetAllotmentsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ GetAllotmentsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GetAllotmentsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
