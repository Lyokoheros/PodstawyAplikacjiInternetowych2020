﻿using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace MVCtutorial.Models
{
    public class Song
    {

        public int Id { get; set; }

        [Display(Name = "Genre")]
        public int GenreId { get; set; }

        [Required(ErrorMessage = "Name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a song is 100 characters!")]
        public string Name { get; set; }

        [Required(ErrorMessage = "Artist is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a artist is 100 characters!")]
        public string Artist { get; set; }
        

    }
}