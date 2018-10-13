PHP Growth Chart - Readme
=========================

    A PHP class for generating graphical (PNG-format) pediatric growth charts,
    based on CDC data, with optional plot of patient progress.
        
    Version 1.1
    -----------
    http://phpgc.abbett.org/
        
        Copyright (C) 2007 Jonathan M. Abbett and Children's Hospital
        Informatics Program
        <jonathan_dot_abbett_at_childrens_dot_harvard_dot_edu>

        This library is free software; you can redistribute it and/or
        modify it under the terms of the GNU Lesser General Public
        License as published by the Free Software Foundation; either
        version 2.1 of the License, or (at your option) any later version.

        This library is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
        Lesser General Public License for more details.

        You should have received a copy of the GNU Lesser General Public
        License along with this library; if not, write to the Free Software
        Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
        02110-1301  USA
        
    Requirements:
        PHP 5.1.0 or later, plus all requirements indicated by JpGraph:
        
            GD 2.28 or higher (Earlier versions might work but are unsupported)
            Recommended: PHP 5.1.2 with built-in GD library
                        
            (Note: You may be able to use the earlier version of JpGraph along with
            PHP 4. Let me know if it works!)

    Download:
        The latest version will always be available at
        https://sourceforge.net/projects/phpgrowthcharts/
        
    Installation:
        Drop all files into a convenient directory on your webserver.
        
    Usage:
        In any web page, call the chart.php file from an <img> tag
        to insert a dynamic growth chart, i.e.:
        
        <img src="chart.php?style=head-age&sex=1&maxage=35&xvals=2,4,6,8,10,12&yvals=36,40,42.2,44,45,45.8" />
        
        chart.php accepts the following URL variables (which match
        GrowthChart's constructor's arguments):
        
        style   A string value indicating the style of growth chart desired,
                based on the XML source files in the data/ subdirectory.
                Basically, the part of the filename before "male" or "female".
                        
        sex     A value of 1 for male, 2 for female, based on GrowthChart's
                SEX constants.
                        
        maxage  Essentially, the patient's current age, but technically the
                maximum age (in months) found in the patient's xvals data.
                If under 36 months, an infant growth chart will be shown.
                If over 36 months, a standard pediatric chart will be shown.
                If only an infant chart exists for the style you specify, but
                you give a max age over 36 (or vice-versa), bad things will 
                happen.
                        
        width   Width of the chart output in pixels (optional)
        
        height  Height of the chart output in pixels (optional)
        
        xvals   Comma-separated list of patient age (X-axis) values, in months.
                (optional, must have same number of values as yvals)
                        
        yvals   Comma-separated list of patient length, weight, BMI, stature,
                or head-circumference (Y-axis) values.
                (optional, must have same number of values as xvals)
                        
        Note: should any xvals or yvals value be inappropriate, or there be an
        unequal number of values in both lists, the patient plot will be
        ignored, and a "blank" growth chart with percentile values only will
        be shown.
        
     Feedback and Requests:
        SourceForge hosts a variety of forums to express your constructive
        feedback:
        
            - Feature Requests
            https://sourceforge.net/tracker/?group_id=166944&atid=840977
            - Support Requests
            https://sourceforge.net/tracker/?group_id=166944&atid=840975
            - Open Discussion
            https://sourceforge.net/forum/forum.php?forum_id=569779
            - User-to-User Help
            https://sourceforge.net/forum/forum.php?forum_id=569780
            
        All feedback and requests should be channeled through those outlets,
        and not sent by e-mail.
        
        
    Thank you for using PHP Growth Chart!
        
        

