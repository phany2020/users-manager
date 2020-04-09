import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListedComponent } from './src/listed/listed.component';
import { ListedModule } from './src/listed/listed.module';



@NgModule({
  declarations: [
    AppComponent,
    ListedComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ListedModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
