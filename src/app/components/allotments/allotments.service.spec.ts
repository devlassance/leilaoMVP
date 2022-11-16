import { TestBed } from '@angular/core/testing';

import { AllotmentsService } from './allotments.service';

describe('AllotmentsService', () => {
  let service: AllotmentsService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(AllotmentsService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
