import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ListedComponent } from './listed.component';
import { ListedRoutingModule } from './listed-routing.module';

import { FormsModule } from '@angular/forms';

@NgModule({
  imports: [
    CommonModule,
    ListedRoutingModule,
    FormsModule
  ],
  exports: [
    ListedComponent
  ],
  declarations: [
    ListedComponent
  ],
  providers: [
  ],
})
export class ListedModule { }
