<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//����������� ������� � ��������� ��� ��� ���������, � ������� ��������� �������� �� ������ ��������������. ���� � ���, ��� ���� � ��� �������� ������� � ��������� articles, �� �� � ����� ������ ����� ��������� section0. ���� �������� ������� � ��������� html, �� �� ����� ����� ��������� section0 ��� section1 (���� html - ������������ ���������, ���� ���� �������� ��������� � ������������ � ���������� articles � html)). ����� ���� �������� ����� ��������� php, �� �� ����� ����� ��������� section0 ��� section1 ��� section2. � ��� �����...

function populate($material_id,$names,$section_name)
{   
    switch($section_name)
    {    
        case 'articles':        
        
        for ($i=0;$i<1;$i++)
        {
            $cname = 'section'.$i;
            
            if ($names[$cname] == 'articles')
            {
                echo 'checked';        
            }                    
        }       
        break;
        
        
        case 'html':
        
        for ($i=0;$i<2;$i++)
        {
            $cname = 'section'.$i;
            
            if ($names[$cname] == 'html')
            {
                echo 'checked';        
            }                    
        }
        break;
        
        
        case 'php':
        
        for ($i=0;$i<3;$i++)
        {
            $cname = 'section'.$i;
            
            if ($names[$cname] == 'php')
            {
                echo 'checked';        
            }                    
        }
        break;
        
        
        case 'css':
        
        for ($i=0;$i<4;$i++)
        {
            $cname = 'section'.$i;
            
            if ($names[$cname] == 'css')
            {
                echo 'checked';        
            }                    
        }
        break;        
                             
    }     
}
?>