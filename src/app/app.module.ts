import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { HomeComponent } from './components/home/home.component';
import { AllotmentComponent } from './components/allotments/allotment/allotment.component';
import { FooterComponent } from './components/footer/footer.component';
import { GetAllotmentsComponent } from './components/allotments/get-allotments/get-allotments.component';
import { HttpClientModule } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { ViewAllotmentComponent } from './components/allotments/view-allotment/view-allotment.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    HomeComponent,
    AllotmentComponent,
    FooterComponent,
    GetAllotmentsComponent,
    ViewAllotmentComponent
  ],
  imports: [
    BrowserModule,
    CommonModule,
    AppRoutingModule,
    FontAwesomeModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
