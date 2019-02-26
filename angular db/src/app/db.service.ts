import { Injectable } from '@angular/core';
import { Student } from './student';
import { Observable , throwError } from 'rxjs';
import { HttpClient , HttpErrorResponse } from '@angular/common/http';
import { map , catchError } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class DbService {
  student: Student[];
  constructor(private http: HttpClient){}
store(student:Student):Observable<Student[]>{
return this.http.post( `http://localhost/student/reg.php`, { data : student }).pipe(
  map((res) => {
    this.student=(res[`data`]);
    return this.student;
      }),
    catchError(this.handleError));
    }
    private handleError(error:HttpErrorResponse){
      console.log(error);
      return throwError('Error! something went wrong.');
    }
}   