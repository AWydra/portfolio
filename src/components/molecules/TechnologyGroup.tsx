import { Heading } from "../atoms/Heading";

interface Props extends React.HTMLAttributes<HTMLElement> {
  heading: string;
  children: React.ReactNode;
}

export const TechnologyGroup = ({
  heading,
  className,
  children,
  ...props
}: Props) => (
  <article className={className} {...props}>
    <Heading className="mb-4">{heading}</Heading>
    <ul className="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
      {children}
    </ul>
  </article>
);
