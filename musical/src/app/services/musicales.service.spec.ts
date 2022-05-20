import { TestBed } from '@angular/core/testing';

import { MusicalesService } from './musicales.service';

describe('MusicalesService', () => {
  let service: MusicalesService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(MusicalesService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
