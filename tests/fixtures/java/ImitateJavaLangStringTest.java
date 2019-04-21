class ImitateJavaLangStringTest
{
    public static void charAtIndex(String a, int b)
    {
        System.out.print(a.charAt(b));
    }

    public static void throwsCharAtWrongIndex(String a, int b)
    {
        try {
            a.charAt(b);
        } catch (IndexOutOfBoundsException e) {
            System.out.print(e.getMessage());
        }
    }
}
