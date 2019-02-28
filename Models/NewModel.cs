using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace dailytask.Models
{
    public class NewModel
    {
        [Required(ErrorMessage = "Mandantory")]
        [Display(Name = "Student Name")]
        public string Sname { get; set; }
        [Required(ErrorMessage = "Mandantory")]
        [Display(Name = "Student Address")]
        [DataType(DataType.MultilineText)]
        public string address { get; set; }
        public Gender genderList { get; set; }
        public Course CourseList { get; set;}
        [Required(ErrorMessage = "Mandantory")]
        [Display(Name = "Student E-Mail")]
        [DataType(DataType.EmailAddress)]
        public string email { get; set; }
        [Required(ErrorMessage = "Mandantory")]
        [Display(Name = "Student User Name")]
        public string username { get; set; }
        [Required(ErrorMessage = "Mandantory")]
        [Display(Name = "Student Password")]
        [DataType(DataType.Password)]
        public string password { get; set; }
        [Required(ErrorMessage = "Mandantory")]
        [Display(Name = "Confirm Password")]
        [DataType(DataType.Password)]
        public string confirmPassword { get; set; }
    }

    public enum Course
    {
        BTech,
        MTech,
        MCA
    }
}